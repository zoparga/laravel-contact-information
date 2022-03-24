<?php

namespace zoparga\ContactInformation\Traits;

use Illuminate\Database\Eloquent\Model;
use zoparga\ContactInformation\ContactInformation;

trait ContactInformationeableTrait
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function contactInformations()
    {
        return $this->morphMany(ContactInformation::class, 'contact_informationeable');
    }

    public function getLatestContactInformations()
    {
        return $this->morphMany(ContactInformation::class, 'contact_informationeable')->orderBy('id', 'desc');
    }

    public function getLastContactInformation()
    {
        return $this->morphMany(ContactInformation::class, 'contact_informationeable')->orderBy('id', 'desc')->first();
    }

    /**
     * @param $data
     * @param $author
     * @param $parent
     *
     * @return mixed
     */
    public function createContactInformation($data)
    {
        return (new ContactInformation())->createContactInformation($this, $data);
    }

    /**
     * @param $id
     * @param $data
     * @param $parent
     *
     * @return mixed
     */
    public function updateContactInformation($id, $data, Model $parent = null)
    {
        return (new ContactInformation())->updateContactInformation($id, $data);
    }
}
