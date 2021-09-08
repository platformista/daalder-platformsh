<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Pionect\Daalder\Models\Media\Media;
use Pionect\Daalder\Models\Tag\Tag;

class MediaTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = (new Media)->getMorphClass();
        foreach (Media::defaultTags() as $tag) {
            Tag::withoutSyncingToSearch(function () use ($tag, $type) {
                return Tag::firstOrCreate([
                    'name' => $tag,
                    'type' => $type
                ]);
            });
        }
    }
}
