<?php

namespace Models;

use \Core\Model;

class Photos extends Model
{
    public function getPhotosCount($id_user)
    {
        $sql = "SELECT count(*) as c FROM photos WHERE id_user = :id";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_user);
        $sql->execute();
        $info = $sql->fetch(\PDO::FETCH_ASSOC);

        return $info['c'];
    }

    public function deleteAll($id_user)
    {
        $sql = "DELETE FROM photos WHERE id_user = :id_user";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();

        $sql = "DELETE FROM photos_comments WHERE id_user = :id_user";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();

        $sql = "DELETE FROM photos_likes WHERE id_user = :id_user";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();
    }

    public function getFeedCollection($ids, $offset, $per_page)
    {
    	$array = [];
    	$users = new Users();

    	if(count($ids) > 0){
    		$sql = "SELECT * FROM photos WHERE id_user IN (".implode(",",$ids).") ORDER BY id DESC LIMIT ".$offset.", ".$per_page;
    		$sql = $this->db->query($sql);

    		if($sql->rowCount() > 0){
    			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);

    			foreach ($array as $k => $item){
    				$user_info = $users->getInfo($item['id_user']);
    				$array[$k]['name'] = $user_info['name'];
					$array[$k]['avatar'] = $user_info['avatar'];
				    $array[$k]['url'] = BASE_URL.'media/photos/'.$item['url'];
			    }
		    }
	    }

    	return $array;
    }
}