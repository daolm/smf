<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Show RSS feeds in your site
 *
 * @author  Phil Sturgeon
 * @author  PyroCMS Development Team
 * @package PyroCMS\Core\Modules\news\Widgets
 */
class Widget_Archive extends Widgets
{

	public $author = 'Phil Sturgeon';

	public $website = 'http://philsturgeon.co.uk/';

	public $version = '1.0.0';

	public $title = array(
		'en' => 'Archive',
		'br' => 'Arquivo do news',
            'fa' => '?????',
		'pt' => 'Arquivo do news',
		'el' => '?????? ??????????',
		'fr' => 'Archives du news',
		'ru' => '?????',
		'id' => 'Archive',
	);

	public $description = array(
		'en' => 'Display a list of old months with links to posts in those months',
		'br' => 'Mostra uma lista navegação cronológica contendo o índice dos artigos publicados mensalmente',
            'fa'=> '????? ???? ??? ??? ????? ?? ????? ???? ?? ??? ??? ??????',
		'pt' => 'Mostra uma lista navegação cronológica contendo o índice dos artigos publicados mensalmente',
		'el' => '????????? ??? ????? ????? ??? ?????????? ?? ?????????? ??? ?????? ?? ???? ??? ??????',
		'fr' => 'Permet d\'afficher une liste des mois passés avec des liens vers les posts relatifs à ces mois',
		'ru' => '??????? ?????? ?? ??????? ?? ???????? ?? ?????? ? ???? ???????',
		'id' => 'Menampilkan daftar bulan beserta tautan post di setiap bulannya',
	);

	public function run($options)
	{
		$this->load->model('news/news_m');
		$this->lang->load('news/news');

		return array(
			'archive_months' => $this->news_m->get_archive_months()
		);
	}

}
