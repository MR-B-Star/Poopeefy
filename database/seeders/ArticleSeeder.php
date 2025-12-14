class ArticleSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Article::factory()->count(5)->create();

        Article::create([
            'title' => 'Pengolahan Limbah Kotoran Makhluk Hidup untuk Kompos',
            'content' => 'Artikel ini menjelaskan proses komposting kotoran hewan untuk dijadikan pupuk organik.',
            'created_by' => 1
        ]);

        Article::create([
            'title' => 'Mengolah Limbah Menjadi Biogas',
            'content' => 'Artikel ini menjelaskan bagaimana kotoran organik dapat diubah menjadi energi terbarukan.',
            'created_by' => 1
        ]);
    }
}
