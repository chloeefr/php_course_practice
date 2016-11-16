<?php
    abstract class abstractModel {
      private $id;
      private $creatorId;
      private $modifierId;
      private $creationDate;
      private $modificationDate;

      // Get and Set values
      public function getId() {
        return $this->id;
      }
      public function setId($id) {
        $this->$id = $id;
      }

      // Creator Id
      public function getCreatorId(){
        return $this->creatorId;
      }
      public function setCreatorId($creatorId){
        $this->$creatorId = $creatorId;
      }

      // Modifier Id
      public function getModifierId(){
        return $this->modifierId;
      }
      public function setModifierId($modifierId){
        $this->$modifierId = $modifierId;
      }

      // Creation Date
      public function getCreationDate(){
        return $this->creationDate;
      }
      public function setCreationDate($creationDate){
        $this->$creationDate = $creationDate;
      }

      // Modification Date
      public function getModificationDate(){
        return $this->modificationDate;
      }
      public function setModificationDate($modificationDate){
        $this->$modificationDate = $modificationDate;
      }

      // Validate User
      public ValidateUser($id){}

  }

?>
