<?php
/**
 * @file
 *
 * Contains Drupal\drupalform\Form\ExampleForm.
 **/
namespace Drupal\drupalform\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   **/
  protected function getEditableConfigNames() {
    return 'drupalform.company';
  }

  /**
   * {@inheritdoc}
   **/
  public function getFormId() {
    return 'drupalform_example_form';
  }

  /**
   * {@inheritdoc}
   **/
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Return array of Form API elements.
    $config = $this->config('drupalform.company');
    $form['company_name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Company name'),
      '#default_value' => $config->get('company_name'),
    );
    $form['integer'] = array(
      '#type' => 'number',
      '#title' => t('Some integer'),
      // The increment or decrement amount
      '#step' => 1,
      // Miminum allowed value
      '#min' => 0,
      // Maxmimum allowed value
      '#max' => 100,
    );
    $form['date'] = array(
      '#type' => 'date',
      '#title' => t('Date'),
      '#date_date_format' => 'Y-m-d',
    );
    $form['website'] = array(
      '#type' => 'url',
      '#title' => t('Website'),
    );
    $form['search'] = array(
      '#type' => 'search',
      '#title' => t('Search'),
      '#autocomplete_route_name' => FALSE,
    );
    $form['range'] = array(
      '#type' => 'range',
      '#title' => t('Range'),
      '#min' => 0,
      '#max' => 100,
      '#step' => 1,
    );
    $form['sumbit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    );
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   **/
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // Validation covered in later recipe, required to satisfy interface
    if (!$form_state->isValueEmpty('company_name')) {
      if (strlen($form_state->getValue('company_name')) <= 5) {
        // Set validation error.
        $form_state->setErrorByName('company_name', t('Company name is less than 5 characters'));
      }
    }
  }
  /**
   * {@inheritdoc}
   **/
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('drupalform.company');
    parent::submitForm($form, $form_state);
    $config->set('company_name',$form_state->getValue('company_name'))->save();
  }
}

