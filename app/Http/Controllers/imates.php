<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\imateintake;
use Illuminate\Http\Request;
use App\Http\Requests\imatesReq;
use Illuminate\Support\Facades\Validator;

class imates extends Controller
{
    public function intake(imatesReq $request)
    {
        try {
            
            $validator = Validator::make($request->all(), $request->rules());
            // Check if validation fails
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors(),
                ], 422); // You can use the appropriate HTTP status code
            }

            // dd($request->all());
                // Generate two UUIDs
                    $uuid1 = Uuid::uuid4()->toString();
                    $uuid2 = Uuid::uuid4()->toString();
                      // Add the UUIDs to the request data
                    $requestData = $request->all();
                    $requestData['External_inmateID'] = $uuid1;
                    $requestData['inmateID'] = $uuid2;
                  

                    // if ($request->hasFile('personalPhoto')) {
                       
                    //     $requestData['personalPhoto'] = $request->file('personalPhoto')->store('images', 'public');
                    // }

                    // return response()->json([
                    //     'status' => false,
                    //     'message' =>  $requestData['personalPhoto'],
                    // ], 400);
                $inmate = imateintake::create($requestData);
                if ($inmate) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Imate Data Created Successfully',
                    ], 200);
                }else {
                    throw new \Exception('Error Processing Request');
                }

            


        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'false',
                'message' => $th->getMessage()
            ], 500);
        }    
    }




    public function search(Request $request)
    {
            try {
                
                // // Validation rules for the identifier (e.g., inmateID)
                // $validationRules = [
                //     'identifier' => 'required|string', // Adjust as needed
                // ];
                //     // Validate the user input
                // $validator = Validator::make(['identifier' => $identifier], $validationRules);

                // if ($validator->fails()) {
                //     // If validation fails, return validation errors
                //     return response()->json([
                //         'status' => false,
                //         'message' => 'Validation failed',
                //         'errors' => $validator->errors(),
                //     ], 422); // You can use the appropriate HTTP status code
                // }


                            // Search for the inmate based on the validated identifier
                // $inmate = imateintake::where('inmateID', $identifier)->first();
                $inmate = imateintake::all();

                if (!$inmate) {
                    // If the inmate is not found, return an appropriate response
                    return response()->json([
                        'status' => false,
                        'message' => 'Inmate not found',
                    ], 404); // You can use an appropriate HTTP status code
                }

                                // If the inmate is found, return the inmate's details
                    return response()->json([
                        'status' => true,
                        'message' => 'Inmate found',
                        'data' => $inmate,
                    ]);




            } catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'message' => $th->getMessage()
                ], 500);
            }
    }




    public function update(imatesReq $request)
    {
        try {
                             
            $validator = Validator::make($request->all(), $request->rules());
            // Check if validation fails
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors(),
                ], 422); // You can use the appropriate HTTP status code
            }

            $inmate = imateintake::where('External_inmateID', $request->External_inmateID)->first();

            if (!$inmate) {
               
                return response()->json([
                    'status' => false,
                    'message' => 'Inmate not found'
                ], 404);
            }
        
            // Update the inmate data
            $inmate->update($request->all());

            
            return response()->json([
                'status' => true,
                'message' => 'Inmate data updated successfully'
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
