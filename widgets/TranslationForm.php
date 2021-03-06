<?php

namespace abcms\multilanguage\widgets;

use Yii;
use abcms\multilanguage\widgets\WidgetBase;
use abcms\multilanguage\models\Translation;
use abcms\library\models\Model;
use abcms\library\fields\Field;

class TranslationForm extends WidgetBase
{

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $languages = $this->languages;
        /**
         * @var array array containing language code as key and related fields as value
         */
        $fieldsArray = [];
        foreach($languages as $key => $language) {
            $fields = $this->createLanguageFields($key);
            $fieldsArray[$key] = $fields;
        }
        echo $this->render('translation-form', [
            'languages' => $languages,
            'fieldsArray' => $fieldsArray,
        ]);
    }

}
