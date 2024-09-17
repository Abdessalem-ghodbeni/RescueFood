<?php

namespace App\Enums;

enum Role: string
{
    case Admin = 'admin';
    case RestaurantChef = 'restaurant_chef';
    case Livreur = 'livreur';
    case Association = 'association';
}
