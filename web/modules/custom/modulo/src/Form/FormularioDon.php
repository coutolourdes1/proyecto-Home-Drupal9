<?php
    namespace Drupal\modulo\Form;

    use Drupal\Core\Form\FormBase;
    use Drupal\Core\Form\FormStatusInterface;
    use Drupal\Component\Utility\UrHelper; 

    class FormularioDon extends FormBase{
        public function getFormId(){
            return 'Crear formulario donacion';
        }

        public function buildForm(array $form, FormStatusInterface $form_state){
            $form['web'] = [
                '#type' => 'text field',
                '#title' => $this->t('Sitio web'),
                '#required' => 'TRUE',
            ];

            $form['location'] = [
                '#type' => 'text_format',
                '#title' => $this->t('Direccion'),
                '#required' => 'TRUE',
            ];

            $form['submit'] = [
                '#type' => 'submit',
                '#value' => $this->t('Enviar'),
            ];
        }

        public function validateForm(array &$form, FormStatusInterface $form_state){
            if(empty($form_state -> getValue('web'))){
                $form_state -> setErrorByName('web', $this->t('Es necesario rellenar este campo'));
            }
        }

        public function submitForm(array &$form, FormStatusInterface $form_state){
            foreach($form_state-> getValues() as $key->$value){
                \Drupal::message()->addMessage($key . '=' .$value);
            }
        }
    }

?>