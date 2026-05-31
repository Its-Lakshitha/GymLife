<?php

use App\Models\Member;

class MemberCodeService
{
    public function generateCode(): string
    {

        $last = Member::max('id');

        return 'MEM'.str_pad($last + 1, 5, '0', STR_PAD_LEFT);
    }
}

