<?php
/**
 * Configurations Controller
 *
 * @author Heverton Rodrigues
 * @email heverton25@gmail.com
 * @since         2014-01-13
 * @path app/Controller/ConfigurationsController.php
 */
class ConfigurationsController extends AppController {

  public function beforeFilter()
  {
    parent::beforeFilter();
    //$this->Auth->allow( 'admin_login' );
  }



  public function admin_about( $id = 1 )
  {
    $this->Configuration->id = $id;
    if (!$this->Configuration->exists()) {
      throw new NotFoundException(__('Indisponível'));
    }
      if ($this->request->is('post') || $this->request->is('put')) {
        if ($this->Configuration->save($this->request->data)) {
          return json_encode( array( 'errors' => false, 'message' => __('Configurações Salvas com Sucesso!') ) );
        } else {
          return json_encode( array( 'errors' => true, 'message' => __('Problemas ao Salvar as Configurações!') ) );
        }
      } else {
        $this->request->data = $this->Configuration->read(null, $id);
    }
  }
}
