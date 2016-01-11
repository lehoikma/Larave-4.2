<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use Sunra\PhpSimple\HtmlDomParser;


class LayTinTucZing extends Command {

	protected $name = 'laytintuc:zing';

	protected $description = 'Lay tin tuc tu trang zing';

	public function __construct()
	{
		parent::__construct();
	}

	public function fire()
	{

		$danh_sach_bai_viet = $this->boc_tach_bai_viet();
		foreach($danh_sach_bai_viet as $bai_viet)
		{
			if (DB::table('pages')->where('title_page', '=', $bai_viet['title'])->count())
			{
				$this->error("Exist in database ". $bai_viet['title']);
				continue;
			}

			$check_insert = DB::table('pages')->insert(
				[
						'title_page' 	=> $bai_viet['title'],
						'img_page' 		=> $this->tai_hinh($bai_viet['image'], Str::slug($bai_viet['title'])),
						'des_page' 		=> $bai_viet['description'],
						'content_page' 		=> $this->boc_tach_noi_dung_bai_viet($bai_viet['url']),
						'cate_id' 		=> 0,
				]
			);
			if ($check_insert)
				$this->info('Insert to database '.$bai_viet['title']. ' => ok');
		}
	}

	public function boc_tach_bai_viet()
	{

		$content = $this->lay_noi_dung($this->option('url'));
		$html = HtmlDomParser::str_get_html($content);

		foreach($html->find('.cate_content article') as $article) {
		    $item['url']    = 'http://news.zing.vn'.$article->find('h1 a', 0)->href;
		    $item['title']    = $article->find('h1 a', 0)->plaintext;
	    	$item['category']    = $article->find('p.cate', 0)->plaintext;
		    $item['description']    = $article->find('p.summary', 0)->plaintext;
				preg_match('#url\((.*)\)#', $article->find('.cover', 0)->style, $matches);
		    $item['image']    = $matches[1];
				// $item['content']  = $this->boc_tach_noi_dung_bai_viet($item['url']);

		    $articles[] = $item;
		}
		return $articles;
	}

	public function boc_tach_noi_dung_bai_viet($url)
	{
		$content = $this->lay_noi_dung($url);
		$html = HtmlDomParser::str_get_html($content);
		$noi_dung = $html->find('.the-article-summary', 0)->outertext;
		$noi_dung .= $html->find('.the-article-body', 0)->outertext;
		$noi_dung .= $html->find('.the-article-credit', 0)->outertext;
		return $noi_dung;
	}


	//lay noi dung html
	function lay_noi_dung($url)
	{
			$this->info('Geting from '.$url);

			$options = array(
	        CURLOPT_RETURNTRANSFER => true,     // return web page
	        CURLOPT_ENCODING       => "",       // handle all encodings
	        CURLOPT_USERAGENT      => "spider", // who am i
	        CURLOPT_AUTOREFERER    => true,     // set referer on redirect

	    );

	    $ch      = curl_init($url);
	    curl_setopt_array( $ch, $options );
	    $content = curl_exec( $ch );
	    curl_close( $ch );

	    return $content;
	}

	function tai_hinh($url, $filename)
	{
		$img = file_get_contents($url);
		$path = 'public/img/tin-tuc/'.$filename.'.jpg';
		file_put_contents($path, $img);

		return $path;
	}

	protected function getOptions()
	{
		return array(
			array('url', null, InputOption::VALUE_OPTIONAL, 'Url can crawl ', 'http://news.zing.vn/song-tre/trang1.html'),
		);
	}


}
