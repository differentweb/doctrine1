<?php
class RelationTest extends Doctrine_Record 
{
    public function setTableDefinition() 
    {
        $this->hasColumn('name', 'string', 200);
        $this->hasColumn('parent_id', 'integer');
    }
}
