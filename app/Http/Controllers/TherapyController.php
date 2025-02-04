<?php

namespace App\Http\Controllers;
use App\Packages\Application\Therapy\Create\CreateTherapyRequest;
use App\Packages\Application\Therapy\Create\CreateTherapyService;
use App\Packages\Application\Therapy\Find\FindOneTherapyRequest;
use App\Packages\Application\Therapy\Find\FindOneTherapyService;
use App\Packages\Application\Therapy\All\AllTherapyService;

use Illuminate\Http\Request;

class TherapyController extends Controller
{
    

    public function createTherapyCategory(Request $request, CreateTherapyService $createTherapyService){

        $createTherapyRequest = new CreateTherapyRequest($request);

        return $createTherapyService->createTherapy($createTherapyRequest);
    }
    
    public function getOneTherapy(Request $request, FindOneTherapyService $findOneTherapyService){

        $findOneTherapyRequest = new FindOneTherapyRequest($request);

        return $findOneTherapyService->findOneTherapy($findOneTherapyRequest);
    }

    public function getTherapyCategories(AllTherapyService $allTherapyService){

        return $allTherapyService->allTherapy();
        
    }
}
