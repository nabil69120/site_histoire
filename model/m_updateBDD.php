<?php

class updateBDD
{
      
   public static function updateNegativeQuantity($id, $qte)
   {
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "SELECT * FROM `products` WHERE id='$id'";
         $sth = $conn->prepare($sql);
         $sth->execute();
         $data = $sth->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }

      $data = $data[0] + array("idx" => $data[0]['id']);
      $data['quantity'] = (int)$data['quantity'] - (int)$qte;
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "UPDATE `products` SET id= :id, cat_id= :cat_id, name= :name, description= :description, image= :image, price= :price, quantity = :quantity WHERE id= :idx";
         $sth = $conn->prepare($sql);
         $sth->execute($data);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }

   }  
        

   public static function updateQuantity($id, $qte)
   {
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "SELECT * FROM `products` WHERE id='$id'";
         $sth = $conn->prepare($sql);
         $sth->execute();
         $data = $sth->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }
            
      $data = $data[0] + array("idx" => $data[0]['id']);

      $data['quantity'] = (int)$qte;
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "UPDATE `products` SET id= :id, cat_id= :cat_id, name= :name, description= :description, image= :image, price= :price, quantity = :quantity WHERE id= :idx";
         $sth = $conn->prepare($sql);
         $sth->execute($data);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }
   }
   

   public static function updatePrice($id, $prix)
   {
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "SELECT * FROM `products` WHERE id='$id'";
         $sth = $conn->prepare($sql);
         $sth->execute();
         $data = $sth->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }
      $data = $data[0] + array("idx" => $data[0]['id']);
      $data['price'] = floatval($prix);
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "UPDATE `products` SET id= :id, cat_id= :cat_id, name= :name, description= :description, image= :image, price= :price, quantity = :quantity WHERE id= :idx";
         $sth = $conn->prepare($sql);
         $sth->execute($data);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }    
   }

   public static function updateDescritipon($id, $msg)
   {
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "SELECT * FROM `products` WHERE id='$id'";
         $sth = $conn->prepare($sql);
         $sth->execute();
         $data = $sth->fetchAll(PDO::FETCH_ASSOC);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }

      $data = $data[0] + array("idx" => $data[0]['id']);
      $data['description'] = (string)$msg;
      try
      {
         $conn = ConnexionBDD::getConnexion();
         $sql = "UPDATE `products` SET id= :id, cat_id= :cat_id, name= :name, description= :description, image= :image, price= :price, quantity = :quantity WHERE id= :idx";
         $sth = $conn->prepare($sql);
         $sth->execute($data);
      }
      catch(PDOException $e)
      {
         $erreur = $e->getMessage();
      }

   }  
       
}

     


?>