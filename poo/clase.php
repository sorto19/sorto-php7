
 <?php
/*
 interface Loggable {
     public function log ($message);
     public function write();
 }

 class Emailer implements Loggable {
      private $messages;
      public function log($message) {
          $this ->messages[] = $message;

      }
      public function write() {
          foreach ($this->messages as $message) {
              //write message to email.log file
          }
          $this->messages = array();
      }
 }
 class DataBase implements Loggable {
     private $messages;
     public function log($message) {
         $this->messages[] = $message;
     }
     public function write()
     {
        foreach ($this->messages as $message ) {
            //write message to database.log.file
        }
        $this->messages =array();
     }
 }
 class Logger {
      private $objects;
      public function register(Loggable $object) {
          $this->objects[]= $object;
      }
      public function write() {
          foreach ($this->objects as $object ) {
              $object->write();
          }
      }
 }*/
 
 //dpatron de inyeccion de dependencias
 interface ServiceInterface {
     public function doTheThing();
 }
 class Client {
     private $service;

     public function __construct(ServiceInterface $service) {
         $this->service = $service;
     }
      public function doSomething() {
          $this->service->doTheThing();
      }
   }
 class Service {
     public function doTask() {
         echo 'performed by service';
     }
 }
 // we create an adpater
 class ServiceAdapter implements ServiceInterface{
     private $service;
     public function __construct(Service $service) {
        $this->service = $service;
     }
     public function doTheThing()
     {
         $this->service->doTask();
     }
     
 }
 $client = new Client(new ServiceAdapter(new Service()));
 $client->doSomething();
 
 ?> 