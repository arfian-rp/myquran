<?php

namespace App\Controllers;

class Quran extends BaseController
{
	public function index()
	{
        $all = json_decode(file_get_contents("https://api.quran.sutanlab.id/surah"));
        $data['data'] = $all->data;
		$data['search'] = true;
		return view('quran', $data);
	}
	public function surat($no)
	{
		$all = json_decode(file_get_contents("https://api.quran.sutanlab.id/surah/$no"));
		$data['no_surat'] = $no;
        $data['all_ayat'] = $all->data;
		$data['search'] = false;
		$data['audio'] = json_decode(file_get_contents("https://al-quran-8d642.firebaseio.com/data.json?print=pretty"))[--$no]->audio;
		return view('surat', $data);
	}
	public function ayat($s, $n)
	{
		$all = json_decode(file_get_contents("https://api.quran.sutanlab.id/surah/$s/$n"));
		$data['no_surat'] = $s;
		$data['no_ayat'] = $n;
        $data['all_ayat'] = $all->data;
		$data['search'] = false;
		return view('ayat', $data);
	}
	public function info($no)
	{
		$all = json_decode(file_get_contents("https://api.quran.sutanlab.id/surah/$no"));
		$data['no_surat'] = $no;
        $data['all_ayat'] = $all->data;
		$data['search'] = false;
		$data['audio'] = json_decode(file_get_contents("https://al-quran-8d642.firebaseio.com/data.json?print=pretty"))[--$no]->audio;
		return view('info', $data);
	}
}