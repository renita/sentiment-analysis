<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NormalizationWord;
use App\Models\BagOfWord;
use App\Models\BagOfWordTest;
use App\Http\Requests;
use DB;
use Redirect;

class NormalizationController extends Controller
{
    public function index()
    {
    	$normalizations = NormalizationWord::all();

    	return view('normalization.index')
    		->with('normalizations', $normalizations);
    }

    public function store(Request $request)
    {
        $word = $request->input('word');
        $normal_word = $request->input('normal_word');

        $normalization = new NormalizationWord;
        $normalization->word = strtolower($word);
        $normalization->normal_word = strtolower($normal_word);
        $normalization->save();

        return Redirect::to('dashboard/normalization');
    }

    public function normalizeTrain()
    {
        $normalizations = NormalizationWord::all();

        DB::beginTransaction();
        foreach($normalizations as $normalization)
        {
            $word = BagOfWord::search($normalization->word);

            if(!empty($word))
            {
                $normal = BagOfWord::find($word->id);
                $normal->word = $normalization->normal_word;
                $normal->save();
            }
        }
        DB::commit();
    }

    public function normalizeTest()
    {
        $normalizations = NormalizationWord::all();

        DB::beginTransaction();
        foreach($normalizations as $normalization)
        {
            $word = BagOfWordTest::search($normalization->word);

            if(!empty($word))
            {
                $normal = BagOfWordTest::find($word->id);
                $normal->word = $normalization->normal_word;
                $normal->save();
            }
        }
        DB::commit();
    }

    public function process()
    {
        $this->normalizeTrain();
        //$this->normalizeTest();

        return Redirect::to('dashboard/tokenizing');
    }

}
