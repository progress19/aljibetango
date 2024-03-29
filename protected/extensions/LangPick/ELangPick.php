<?php
    Yii::import('zii.widgets.CPortlet');
    /**
    * This is simple language picker
    * @author lowliet (lowliet.com)
    */
    class ELangPick extends CPortlet
    {
        /**
        * @var string picker type.
        * Valid values are 'buttons', 'dropdown' and 'links'.
        */
        public $pickerType = 'links';

        /**
        * @var string buttons size.
        * Valid values are 'mini', 'small' and 'large'.
        */
        public $buttonsSize = 'mini';
        
        /**
         * @var array list of languages to exclude from display list
         */
        public $excludeFromList = array();

        /**
        * @var string buttons color.
        * Valid values are 'primary', 'info', 'success', 'warning', 'danger' and 'inverse'.
        */
        public $buttonsColor = '';

        /**
        * @var string links separator.
        * Used when $pickerType = links.
        * HTML tags can be used, eg. <b>, <strong>, <i>
        */
        public $linksSeparator = ' <b>|</b> ';

        /**
        * @var string inline form style.
        */
        public $formStyle = 'margin:0; border: none; padding: 0; width: auto;';

        /**
        * Iterates through messages directories
        * @return array list of avaible languages
        */

       private static function getGenderOptions(){
            return array('M' => 'Male', 'F' => 'Female');
        }

        private static function getLanguages()
        {
            $translations = array();
            $dirs = new DirectoryIterator(Yii::app()->messages->basePath);
            foreach ($dirs as $dir)
                if ($dir->isDir() && !$dir->isDot())
                    $translations[$dir->getFilename()] = $dir->getFilename(); 
            return in_array(Yii::app()->sourceLanguage, $translations) ? $translations : array_merge($translations, array(Yii::app()->sourceLanguage => Yii::app()->sourceLanguage));
        }    

        /**
        * renders CPortlet content
        */
        protected function renderContent()
        {
            $translations = self::getLanguages();
            for ($i = 0; $i < count($this->excludeFromList); $i++)
                $this->excludeFromList[$i] = strtolower($this->excludeFromList[$i]);
            $translations = array_diff($translations, $this->excludeFromList);
            
            echo '<div id="languagePickerContainer">';
            switch ($this->pickerType)
            {
                case 'buttons':                     
                if (!isset(Yii::app()->components['bootstrap']))
                    throw new CException('Cannot find Bootstrap component');

                $buttons = array();
                foreach ($translations as $trans)
                    $buttons[] = array_merge($buttons, array('type'=>$this->buttonsColor, 'label'=>strtoupper($trans), 'active'=>Yii::app()->getLanguage() == $trans, 'buttonType'=>'submit', 'htmlOptions' => array('name'=>'languagePicker', 'value'=>$trans)));

                echo CHtml::form('', 'post', array('style'=>$this->formStyle));

                try
                {
                    $this->widget('bootstrap.widgets.BootButtonGroup', array( 
                            'toggle' => 'radio',
                            'size' => $this->buttonsSize,
                            'buttons' => $buttons,
                        ));
                } 
                catch (CException $e) 
                {
                    try
                    {
                        $this->widget('bootstrap.widgets.TbButtonGroup', array(
                                'toggle' => 'radio',
                                'size' => $this->buttonsSize,
                                'buttons' => $buttons,
                            ));
                    }
                    catch (CException $e) 
                    {
                        echo 'Cannot find Bootstrap...';
                    }
                }
                echo CHtml::endForm();
                break;
                case 'dropdown':
                    $translationsU = array();
                    foreach ($translations as $k => $v)
                        $translationsU[$k] = strtoupper($v);
                    echo CHtml::form('', 'post', array('style'=>$this->formStyle));

                    $sel_en = $sel_es = $sel_fr = $sel_de = $sel_it = $sel_ja = $sel_pt = $sel_ru = $sel_zh = '';

                    switch (Yii::app()->getLanguage()) {
                        case 'en': $sel_en = 'selected="selected"'; break;
                        case 'es': $sel_es = 'selected="selected"'; break;    
                        case 'pt': $sel_pt = 'selected="selected"'; break;
                        case 'zh': $sel_zh = 'selected="selected"'; break;
                        }

                    echo '
                    <select onchange="this.form.submit()" name="languagePicker" id="languagePicker">
                        <option '.$sel_en.' class="fondo-lang" value="en">ENG</option>
                        <option '.$sel_es.' class="fondo-lang" value="es">ESP</option>
                        <option '.$sel_pt.' class="fondo-lang" value="pt">POR</option>
                        <option '.$sel_zh.' class="fondo-lang" value="zh">CH</option>
                    </select>';

                    echo CHtml::endForm();
                    
                    break;
                case 'links':
                    foreach ($translations as $trans)
                        echo CHtml::link(strtoupper($trans), Yii::app()->homeUrl, array('class'=>(Yii::app()->getLanguage() == $trans ? 'active' : 'inactive'), 'submit'=>'', 'params'=>array('languagePicker'=>$trans))) . ($trans === end($translations) ? '' : $this->linksSeparator);
                    break;
            }
            echo '</div>';
        }

        /**
        * sets the language and saves to cookie
        * @param $daysExpires integer number of days which cookie will last
        */
        public static function setLanguage($daysExpires = 100)
        {
            if (Yii::app()->request->getPost('languagePicker') !== null && in_array($_POST['languagePicker'], self::getLanguages(), true))
            {
                Yii::app()->setLanguage($_POST['languagePicker']);
                $cookie = new CHttpCookie('language', $_POST['languagePicker']);
                $cookie->expire = time() + 60 * 60 * 24 * $daysExpires; 
                Yii::app()->request->cookies['language'] = $cookie;
            }
            else if (isset(Yii::app()->request->cookies['language']) && in_array(Yii::app()->request->cookies['language']->value, self::getLanguages(), true))
            {
                Yii::app()->setLanguage(Yii::app()->request->cookies['language']->value);
            }
            else if (isset(Yii::app()->request->cookies['language']))
            {
                unset(Yii::app()->request->cookies['language']);
            }
            else
            {
                $preferredLang = explode('_', Yii::app()->getRequest()->getPreferredLanguage());
                if (in_array($preferredLang[0], self::getLanguages(), true))
                    Yii::app()->setLanguage($preferredLang[0]);
            }
        }
    }
?>