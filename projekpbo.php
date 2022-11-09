<b> Zahra Putri Zaihan <br>
XI RPL <br>
--------------------------- <br><b><br><br>

<?php
class document {
  public $authors;
  public $date;

  public function setAuthors($authors){
    $this->authors = $authors;
  }

  public function setDate($date){
    $this->date = $date;
  }
  
  public function getAuthors(){
    return $this->authors;
  }

  public function getDate(){
    return $this->date;
  }

}
$doc= new document();
$doc->setAuthors (" Author : Cayaa");
$doc->setDate("Date : 2020-07-11");

echo $doc->getAuthors();     
echo "<br>" ;            
echo $doc->getDate(); 
echo "<br>";
echo"<hr>";


class book extends document {
  public $title;

  public function setAuthors($authors){
    $this->authors = $authors;
  }
  public function getAuthors(){
    return $this->authors;
  }

  public function setTitle($title){
    $this->title = $title;
  }

  public function getTitle(){
    return $this->title;
  }
}

$dd = new book();
$dd->setAuthors("Author : Cayaa");
$dd->setTitle(" Title : KISAH CINTA KU");

echo $dd->getAuthors();
echo "<br>";
echo $dd->getTitle();
echo "<br>";
echo "<hr>";

class email extends document{
  public $subject;

  public function setAuthors($authors){
    $this->authors = $authors;
  }
  public function getAuthors(){
    return $this->authors;
  }

  public function setSubject($subject){
    $this->subject = $subject;
  }

  public function getSubject(){
    return $this->subject;
  }
}

$ff = new email();
$ff->setSubject ("Rasa Suka Yang Tiba Tiba Datang");
$ff->setAuthors("Author : Cayaa");

echo $ff->getAuthors();
echo "<br>";
echo $ff->getSubject();
echo "<br><hr>";
?>