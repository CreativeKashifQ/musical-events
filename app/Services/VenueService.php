<?php

namespace App\Services;

use App\Models\Venue;
use App\Models\UnderMaintenance;

class VenueService
{

    //////////////////////////////////////////////////////////////////////////////
    //  VENUE ADD
    /////////////////////////////////////////////////////////////////////////////
    // in $venue we expect the following attributes
    // venue name,location,capacity,description
    public function addVenue($venue)
    {

        $v = new Venue();
        $v->user_id = auth()->user()->id;
        $v->name = $venue->name;
        $v->country = $venue->country;
        $v->city = $venue->city;
        $v->location = $venue->location;
        $v->capacity = $venue->capacity;
        $v->description =$venue->description;
        $v->save();
        return redirect()->route('venue.manage.entity',['venue' => $v]);
    }

    //////////////////////////////////////////////////////////////////////////////
    //  UPDATE BASIC INFORMATION OF VENUE ENTITY
    /////////////////////////////////////////////////////////////////////////////
    // in $venue we expect the following attributes
    // venue name,location,capacity,description
    public function updateEntity($venue)
    {
        return $venue->update();
    }

    //////////////////////////////////////////////////////////////////////////////
    //  UPDATE SCHEDULE OF VENUE ENTITY
    /////////////////////////////////////////////////////////////////////////////
    // in $venue we expect the following attributes
    // opening_time , closing_time
    public function updateSchedule($venue)
    {

        return $venue->update();
    }

    //////////////////////////////////////////////////////////////////////////////
    //  UPDATE SCHEDULE OF VENUE ENTITY
    /////////////////////////////////////////////////////////////////////////////
    // in $venue we expect the following attributes
    // hourly_rate of venue
    public function updatePricing($venue)
    {
        return $venue->update();
    }

    //////////////////////////////////////////////////////////////////////////////
    //  UPDATE MAINTENANCE OF VENUE ENTITY
    /////////////////////////////////////////////////////////////////////////////
    // in $data we expect the following attributes
    //  maintenance data,start time, end time
    public function updateMaintenance($data)
    {

        $under_maintenance = new UnderMaintenance();
        $under_maintenance->service_id = $data['id'];
        $under_maintenance->service_type = 'Venue';
        $under_maintenance->date = $data['date'];
        return $under_maintenance->save();
    }

    //////////////////////////////////////////////////////////////////////////////
    //  UPDATE MAINTENANCE OF VENUE ENTITY
    /////////////////////////////////////////////////////////////////////////////
    // in $data we expect the following attributes
    //  under maintenance venue id to be removed
    public function removeFromUnderMaintenance($id)
    {
        $v_under_maintenance = UnderMaintenance::where('id',$id)->first();
        return $v_under_maintenance->delete();
    }

    
   













}
