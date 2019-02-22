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
                'dni' => $info['ruc'],
                'cui' => $info['razon_social'],
                'ciiu' => $info['ciiu'],
                'fecha_actividad' => date("d/m/Y", strtotime($info['fecha_actividad'])),
                'condicion' => $info['contribuyente_condicion'],
                'tipo' => $info['contribuyente_tipo'],
                'estado' => $info['contribuyente_estado'],
                'nombre_comercial' => $info['nombre_comercial'],
                'fecha_inscripcion' => date("d/m/Y", strtotime($info['fecha_inscripcion'])),
                'domicilio' => $info['domicilio_fiscal'],
                'emision' => $info['sistema_emision'],
                'contabilidad' => $info['sistema_contabilidad'],
                'exterior' => $info['actividad_exterior'],
                'emision_electronica' => date("d/m/Y", strtotime($info['emision_electronica'])),
                'fecha_inscripcion_ple' => date("d/m/Y", strtotime($info['fecha_inscripcion_ple'])),
                'Oficio' => $info['Oficio'],
                'fecha_baja' => date("d/m/Y", strtotime($info['fecha_baja'])),
                'representante_legal' => $info['representante_legal'],
                'empleados' => $info['empleados'],
                'locales' => $info['locales']
            ];
        }
    }
}