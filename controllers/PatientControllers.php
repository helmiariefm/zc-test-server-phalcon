<?php

    use Phalcon\Mvc\Controller;

    class PatientController extends Controller{
        public function index()
        {
            // Mengambil semua pasien dari database
            $patients = PatientModel::find();

            // Mengirimkan data pasien sebagai respons API
            $response = [
                'status' => 'success',
                'data' => $patients,
            ];

            return $this->response->setJsonContent($response);
        }
    }

?>