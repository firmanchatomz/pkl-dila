<?php 


namespace app\Controllers;

use app\Core\Controller;
 
class HomeController extends Controller
{
    function __construct()
    {
        $this->setheader('admin/header_staradmin');
        $this->setfooter('admin/footer_staradmin');
    }
	
	public function index()
    {
        $data['siswa'] = $this->model('crud')->read('tb_siswa');
        $this->page('admin/lihatsiswa',$data);
    }
    public function halaman($value='')
    {
    	$this->page('perpustakaan');
    }
    
    public function profil()
    {
    	$data['siswa'] = $this->model('home')->datasiswa();
    	$this->page('profil',$data);
    }
    public function halamankategori($value='')
    {
        $data['kategori'] = $this->model('home')->listkategori();   
        $this->page('datakategori',$data);

    }
}