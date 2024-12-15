<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;
use Carbon\Carbon;

class PublishScheduledBlogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish blogs that have reached their scheduled publication time';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now();

        // Update blogs where the publication time has been reached
        $blogs = Blog::where('status', 'concept')
            ->where('publication_date', '<=', $now)
            ->update(['status' => 'gepubliceerd']);

        $this->info("$blogs blogs zijn gepubliceerd.");

        return 0;
    }
}
