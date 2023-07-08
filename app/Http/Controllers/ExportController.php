<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Exports\PostsExport;
use Maatwebsite\Excel\Facades\Excel;


class ExportController extends Controller
{
   
    public function export()
    {
        $fileName = 'posts.html';
        
        return Excel::download(new PostsExport(), $fileName);

        //return Excel::download(new PostsExport, 'posts.html');
    }
}

       