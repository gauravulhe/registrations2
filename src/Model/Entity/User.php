<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $full_name
 * @property string $address
 * @property string $country
 * @property string $zip_code
 * @property string $gender
 * @property \Cake\I18n\Time $date_of_birth
 * @property string $language
 * @property string $about_yourself
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    /**
     * Fields that are excluded from JSON an array versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

    protected function _getLanguage($language){
        return ucwords($language);
    }

    protected function _setLanguage($language){
        $this->set('slug', Inflector::slug($language));
        return $language;
    }

    protected function _getFullName($full_name){
        return ucwords($full_name);
    }


}
