<?php
namespace App\Models;
use Closure;
use CodeIgniter\Database\BaseBuilder;
use CodeIgniter\Database\BaseConnection;
use CodeIgniter\Database\BaseResult;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\Exceptions\DatabaseException;
use CodeIgniter\Database\Exceptions\DataException;
use CodeIgniter\Exceptions\ModelException;
use CodeIgniter\I18n\Time;
use CodeIgniter\Pager\Pager;
use CodeIgniter\Validation\ValidationInterface;
use Config\Database;
use ReflectionClass;
use ReflectionProperty;
use stdClass;

class BaseModel {

    protected $table = '';
    protected $db;
    protected $validation;
    protected $insertID = 0;
    protected $DBGroup;

    /**
     * Model constructor.
     *
     * @param ConnectionInterface $db
     * @param ValidationInterface $validation
     */
    public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null) {
        if ($db instanceof ConnectionInterface) {
            $this->db = & $db;
        } else {
            $this->db = Database::connect($this->DBGroup);
        }
        if (is_null($validation)) {
            $validation = \Config\Services::validation(null, false);
        }
        $this->validation = $validation;
    }

    public function findOne(Array $where=null, Array $order=null) {
        $query = $this->db->table($this->table);
        if($where) {
            $query->where($where);
        }
        if($order) {
            $query->orderBy($order[0], $order[1]);
        }
        return $query->get()
        ->getRow();//*/
        //return $this->db->query('SELECT * FROM tbl_sliders WHERE status = 1 ORDER BY updated_at;')->getResult();
    }

    public function getAll(Array $where=null, Array $order=null) {
        $query = $this->db->table($this->table);
        if($where) {
            $query->where($where);
        }
        if($order) {
            $query->orderBy($order[0], $order[1]);
        }
        return $query->get()
        ->getResult();//*/
        //return $this->db->query('SELECT * FROM tbl_sliders WHERE status = 1 ORDER BY updated_at;')->getResult();
    }

    public function save($data) {
        $result = $this->db
        ->table($this->table)
        ->insert($data)
        //->getResult()
        ;
        if ($result) {
            $this->insertID = $this->db->insertID();
        }
        return $this->insertID;
    }

    public function update($id, $data) {
        $result = $this->db
        ->table($this->table)
        ->where(['id' => $id])
        ->update($data);
        return $result;
    }

    public function delete($id) {
        $result = $this->db
        ->table($this->table)
        ->where(['id' => $id])
        ->delete();
        return $result;
    }
}