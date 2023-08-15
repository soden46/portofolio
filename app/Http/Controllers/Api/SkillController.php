<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $skill = Skill::select('*')->orderBy('id', 'ASC')->get();

        return response()->json([
            'status'    => true,
            'data'      => $skill,
        ], 200);
    }
}
