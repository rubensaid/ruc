<?php
namespace RUC;

class RUC
{

    public static function find($ruc)
    {
        $data = file_get_contents("https://api.sunat.cloud/ruc/".$ruc);
        $info = json_decode($data, true);

        if($data==='[]')
        {
            return false;
        }
        else
        {
            return (object) [
                'ruc' => $info['ruc'],
                'razon_social' => $info['razon_social'],
                'ciiu' => $info['ciiu'],
                'fecha_actividad' => strtotime($info['fecha_actividad']),
                'condicion' => $info['contribuyente_condicion'],
                'tipo' => $info['contribuyente_tipo'],
                'estado' => $info['contribuyente_estado'],
                'nombre_comercial' => $info['nombre_comercial'],
                'fecha_inscripcion' => strtotime($info['fecha_inscripcion']),
                'domicilio' => $info['domicilio_fiscal'],
                'emision' => $info['sistema_emision'],
                'contabilidad' => $info['sistema_contabilidad'],
                'exterior' => $info['actividad_exterior'],
                'fecha_emision_electronica' => strtotime($info['emision_electronica']),
                'fecha_inscripcion_ple' => strtotime($info['fecha_inscripcion_ple']),
                'Oficio' => (isset($info['Oficio']))?$info['Oficio']:'',
                'fecha_baja' => strtotime($info['fecha_baja']),
                'representante_legal' => $info['representante_legal'],
                'empleados' => $info['empleados'],
                'locales' => $info['locales']
            ];
        }
    }
}