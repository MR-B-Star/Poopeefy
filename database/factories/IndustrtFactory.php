class ArticleFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(5),
            'created_by' => 1  // admin default
        ];
    }
}
