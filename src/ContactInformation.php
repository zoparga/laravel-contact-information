<?php

namespace zoparga\ContactInformation;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInformation extends Model
{
    use SoftDeletes;

    public $table = 'contact_information_table';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',

    ];

    protected $fillable = [
        'contact_informationeable_id',
        'contact_informationeable_type',

        'type',
        'information',
        'primary',

    ];

    public function ContactInformationeable()
    {
        return $this->morphTo();
    }


    // /**
    //  * @param $id
    //  * @param $data
    //  *
    //  * @return mixed
    //  */
    public function updateContactInformation($id, $data)
    {
        $contactInformation = static::find($id);
        $contactInformation->update($data);

        return $contactInformation;
    }
}
