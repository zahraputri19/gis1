<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard'
            ];
        return view('v_templete', $data);
    }

    //panggil viewmap
    public function viewMap()
    {
        $data = [
            'judul' => 'View Map',
            'page' => 'v_viewmap'
            ];
        return view('v_templete', $data);
    }

    //panggil base map
    public function baseMap()
    {
        $data = [
            'judul' => 'Base Map',
            'page' => 'v_basemap'
            ];
        return view('v_templete', $data);
    }

    //panggil circle
    public function circle()
    {
        $data = [
            'judul' => 'Circle',
            'page' => 'v_circle'
            ];
        return view('v_templete', $data);
    }
    //panggil polyline
    public function polyline()
    {
        $data = [
            'judul' => 'Polyline',
            'page' => 'v_polyline'
            ];
        return view('v_templete', $data);
    }
    //panggil polygon
    public function polygon()
    {
        $data = [
            'judul' => 'Polygon',
            'page' => 'v_polygon'
            ];
        return view('v_templete', $data);
    }
    //panggil geojson
    public function geojson()
    {
        $data = [
            'judul' => 'GeoJSON',
            'page' => 'v_geojson'
            ];
        return view('v_templete', $data);
    }
    //panggil get coordinat
    public function getCoordinat()
    {
        $data = [
            'judul' => 'Get Coordinat',
            'page' => 'v_getcoordinat'
            ];
        return view('v_templete', $data);
    }   
    //panggil get coordinat
    public function getCoordinat2()
    {
        $data = [
            'judul' => 'Get Coordinat',
            'page' => 'v_getcoordinat2' 
            ];
        return view('v_templete', $data);
    }
        //panggil marker
        public function marker()
        {
            $data = [
                'judul' => 'Marker',
                'page' => 'v_marker'
                ];
            return view('v_templete', $data);
        }  
        //panggil getCoordinat dalam radius
    public function geolokasi()
    {
        $data = [
            'judul' => 'Geolocation',
            'page' => 'v_geolokasi',
        ];
        return view('v_templete', $data);
    }     
}
