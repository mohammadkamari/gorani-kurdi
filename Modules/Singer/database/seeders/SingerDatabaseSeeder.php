use Modules\Singer\Entities\Singer;

public function run(): void
{
    Singer::create([
        'name' => 'کامکار',
        'birth_place' => 'سنندج',
        'birth_year' => 1960,
    ]);

    Singer::create([
        'name' => 'هورامی',
        'birth_place' => 'هورامان',
        'birth_year' => 1975,
    ]);
}
