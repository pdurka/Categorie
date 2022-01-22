<?php

namespace App\Listeners;

use App\Events\CategoryTranslationCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\CategorieMail;

class CategoryTranslationCreatedEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CategoryTranslationCreatedEvent  $event
     * @return void
     */
    public function handle(CategoryTranslationCreatedEvent $event)
    {
        $details = [
            'title' => 'Successfully created category ' . $event->categorie->name . ' country '. $event->categorie->country,
            'body' => 'Categorie ' . $event->categorie->name . ' country ' . $event->categorie->country . ' created successfully. Id categorie ' . $event->categorie->categories_id,
        ];

//        \Mail::to('your_receiver_email@gmail.com')->send(new CategorieMail($details));
    }
}
