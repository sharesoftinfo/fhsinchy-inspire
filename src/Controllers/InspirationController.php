<?php
namespace Fhsinchy\Inspire\Controllers;

use Illuminate\Http\Request;
use Fhsinchy\Inspire\Inspire;

class InspirationController
{
    public function inspire(Inspire $inspire) {
        
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
     public function add ()
    {
       dd('jbsdhi');
    }
}