<?php

return [
    // Auth
    'credential_not_match' => ['code' => 1000, 'message' => 'Account or password not match.'],
    'email_already_use' => ['code' => 1001, 'message' => 'Email address is already use.'],
    'phone_already_use' => ['code' => 1002, 'message' => 'Phone address is already use.'],
    'confirmation_code_not_match' => ['code' => 1003, 'message' => 'Confirmation code does not match or invalid.'],
    'confirmation_code_expired' => ['code' => 1004, 'message' => 'Confirmation code has expired.'],
    'account_confirmed' => ['code' => 1005, 'message' => 'Account has been confirmed.'],
    'account_not_confirmed' => ['code' => 1006, 'message' => 'Account is not confirmed.'],
    'account_deactivated' => ['code' => 1007, 'message' => 'Account is deactivated.'],
    'account_locked' => ['code' => 1008, 'message' => 'Account is locked.'],
    'user_not_found' => ['code' => 1009, 'message' => 'User not found.'],
    'password_reset_token_not_match' => ['code' => 1010, 'message' => 'Password reset token does not match or invalid.'],
    'password_reset_token_expired' => ['code' => 1011, 'message' => 'Password reset token expired.'],
    'social_not_found' => ['code' => 1012, 'message' => 'No social networks available.'],
    'social_auth_error' => ['code' => 1013, 'message' => 'Social authentication failure.'],

    // User
    'user_company_not_valid' => ['code' => 1200, 'message' => 'No company information exists for this user.'],
    'user_old_password_doesnt_match' => ['code' => 1201, 'message' => 'Mật khẩu cũ không chính xác.'],
    'user_new_password_cant_same_old' => ['code' => 1202, 'message' => 'Mật khẩu mới không được giống mật khẩu cũ.'],

    // Common
    'permission_denied' => ['code' => 9000, 'message' => 'Permission denied.'],
    'cannot_force_delete' => ['code' => 9001, 'message' => 'Cannot force delete.'],
    'auth_not_required' => ['code' => 9002, 'message' => 'Authentication is not required.']
];
