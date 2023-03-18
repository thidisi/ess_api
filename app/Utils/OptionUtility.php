<?php

namespace App\Utils;

use App\Models\User;

class OptionUtility
{
    /**
     * @param $type
     * @param $id
     * @return mixed|null
     */
    public function get($type, $id = null)
    {
        $options = config("option.$type");
        if (is_array($id)) {
            return $id ? collect($options)->whereIn('id', $id) ?? null : $options;
        }
        return $id ? collect($options)->where('id', $id)->first() ?? null : $options;
    }

    /**
     * @param $type
     * @return array
     */
    public function getFlatIDs($type): array
    {
        return collect(config("option.$type"))->pluck('id')->toArray();
    }
}
