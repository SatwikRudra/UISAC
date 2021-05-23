<?php
require_once ( dirname(  __FILE__). '/../functions/connectionClass.php' );
class galleryClass extends connectionClass{
    public function uploadGallery($image){
        $insert="insert into gallery (ImageName) values ('$image')";
        $result=$this->query($insert);
        if($result){
            echo "File is uploaded";
        }
        else
        {
            echo("File is not uploaded".mysqli_error($insert));
        }
    }
    
    public function listGallery($query){
        $select="select * from gallery $query";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
    
    public function addAlbum($name){
        $insert="insert into album (AlbumName) values ('$name')";
        $result=$this->query($insert);
        if($result){
            echo "Album created";
        }
        else
        {
            echo "Album not created";
        }
    }
    
    public function listAlbum(){
        $select="select * from album";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
    
}