<?php
namespace frontend\models;

use common\models\Trip;
use yii\base\Model;

class TripForm extends Model
{
    public $startdate;
    public $enddate;
    public $notes;
    public $id_country;
    public $id_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['startdate', 'required'],
            ['startdate', 'safe'],
            ['startdate', 'date', 'format' => 'yyyy-M-d'],

            ['enddate', 'required'],
            ['enddate', 'safe'],
            ['enddate', 'date', 'format' => 'yyyy-M-d'],

            ['notes', 'required'],
            ['notes', 'string'],

            ['enddate', 'compare', 'compareAttribute' => 'startdate', 'operator' => '>'],




        ];
    }

    public function attributeLabels()
    {
        return [
            'startdate' => 'Start date',
            'enddate' => 'End date',
            'notes' => 'Notes',
        ];
    }

    public function saveTrip()
    {
        if (!$this->validate()) {
            return null;
        }
        $trip = new Trip();
        $trip->startdate = $this->startdate;
        $trip->enddate = $this->enddate;
        $trip->notes = $this->notes;
        $trip->id_country = $this->id_country;
        $trip->id_user = $this->id_user;
        return $trip->save() ? $trip : null;
    }

}