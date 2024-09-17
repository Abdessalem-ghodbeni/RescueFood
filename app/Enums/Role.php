<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case RestaurantChef = 'restaurant';
    case Livreur = 'livreur';
    case Association = 'association';
}
