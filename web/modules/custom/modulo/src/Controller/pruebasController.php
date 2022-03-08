<?php
    namespace Drupal\modulo\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class PruebasController extends ControllerBase{
        public function content(){
            return array(
                '#type' => 'markup',
                '#markup' => $this->t('Hola Mundo'),
            );
        }

        public function crearFomulario(){
            $form = $this->formBuilder()->getForm('Drupal\modulo\Form\Formulario');

            return [
                '#theme' => 'Crear_formulario',
                '#titulo' => $this->t('Formulario Donaciones'),
                '#descripcion' => 'Formulario de donaciones',
                '#formulario' => $form,
            ];
        }
    }

?>