<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;
use Carbon\Carbon;

class UpdateBlogStatus extends Command
{
    protected $signature = 'blogs:update-status';
    protected $description = 'Controleer de publicatiedatum en -tijd van blogs en wijzig de status naar "gepubliceerd" als de tijd is bereikt';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $now = Carbon::now();

        // Haal alle blogs met de status 'concept' en een publicatiedatum/tijd tot en met nu op
        $blogs = Blog::where('status', 'concept')
            ->where('publication_date', '<=', $now)
            ->get();

        foreach ($blogs as $blog) {
            $blog->status = 'gepubliceerd';
            $blog->save();
            $this->info("Blog '{$blog->title}' is nu gepubliceerd.");
        }

        $this->info('De status-update is voltooid.');
        return 0;
    }
}
