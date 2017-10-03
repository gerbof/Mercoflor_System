<?php
class TWebUser extends CWebUser
{
    private $_access=array();

    public function checkAccess($operation,$params=array(),$allowCaching=true)
    {
        if($allowCaching && $params===array() && isset($this->_access[$operation]))
            return $this->_access[$operation];

        $cache = Yii::app()->session['checkAccess'];
        if($allowCaching && !$this->getIsGuest() && isset($cache[$operation]) && time() - $cache[$operation]['t'] < 1800)
        {
            $checkAccess = $cache[$operation]['p'];
        } else {
            $checkAccess = Yii::app()->getAuthManager()->checkAccess($operation,$this->getId(),$params);

            if($allowCaching && !$this->getIsGuest())
            {
                $access = isset($cache) ? $cache : array();
                $access[$operation] = array('p'=>$checkAccess, 't'=>time());
                Yii::app()->session['checkAccess'] = $access;
            }
        }

        return $this->_access[$operation] = $checkAccess;
    }
	
	public function isAdmin() {
                return $this->getState('isAdmin');  
        }
}
?>