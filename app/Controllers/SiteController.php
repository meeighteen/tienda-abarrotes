<?php
namespace App\Controllers;

use App\Models\ClientModel;

class SiteController extends BaseController{

	public function __construct(){
	}

	public function insertacliente(){
		$validation =\Config\Services::validation();
		$validation->setRules([
		    'name' => 'required|alpha',
		    'lastname' => 'required|alpha',
		    'dni' => 'required|numeric|min_length[8]|max_length[8]|is_unique[cliente.Dnicli]',
		    'cellphone' => 'required|numeric|min_length[9]|max_length[9]'
		]);
		if($validation->withRequest($this->request)->run() === FALSE){
			$data = array('response'=> 'error','message'=>$validation->getErrors());
		}else{
			$data=[
				'Nombrecli' => $this->request->getVar('name'),
				'Apellidocli' => $this->request->getVar('lastname'),
				'Dnicli' => $this->request->getVar('dni'),
				'Celularcli' => $this->request->getVar('cellphone')
				];
			$builder=$this->db->table('cliente');
			if ($builder->insert($data)) {
				$data = array('response'=> 'success','message'=>'Cliente registrado exitosamente.');
			}else{
				$data = array('response'=> 'error','message'=>'Error al registrar cliente.');
			}
		}
		echo json_encode($data);
	}
	public function añadir_regalo(){
		$validation =\Config\Services::validation();
		$validation->setRules([
			'dni' => 'required|numeric|min_length[8]|max_length[8]|is_not_unique[cliente.Dnicli]',
			'idregalo' => 'required|is_not_unique[regalo.Idregalo]'
		]);
		$dni=$this->request->getVar('dni');
		if($validation->withRequest($this->request)->run() === FALSE){
			$data = array('response'=> 'error','message'=>$validation->getErrors());
		}else{
			$dni=$this->request->getVar('dni');
			$builder = $this->db->table('cliente');
			$result=$builder->select('*')->where('Dnicli', $dni)->get();

			if(!empty($result->getResult())){
				$data=[
					'Dnicli' => $dni,
					'Idregalo' => $this->request->getVar('idregalo')
					];
				$builder2 = $this->db->table('cliente');
				$builder2->where('Dnicli', $dni);
				if ($builder2->update($data)) {
					$data = array('response'=> 'success','message'=>'Regalo añadido exitosamente.');
				}else{
					$data = array('response'=> 'error','message'=>'Error al añadir regalo.');
				}
			}else{
				$data = array('response'=> 'error','message'=>$validation->getErrors());
			}
		}
		echo json_encode($data);
	}
	public function inicio(){
		return view('site/inicio');
	}
	public function reporte_grafico(){
		return view('site/reporte_grafico');
	}
}