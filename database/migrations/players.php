
<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('players', function (Blueprint $table) {
      $table->increments('id');
      $table->string('first');->default('';)
      $table->string('last');->default('';)
      $table->integer('gamesPlayed');->default('0';)
      $table->integer('avgMinutes');->default('0';)
      $table->integer('ppg');->default('0';)
      $table->integer('rpg');->default('0';)
      $table->integer('apg');->default('0';)
      $table->integer('spg');->default('0';)
      $table->integer('bpg');->default('0';)
      $table->integer('tpg');->default('0';)
      $table->float('fgPercent');->default('0.00';)
      $table->float('ftPercent');->default('0.00';)
      $table->float('tpPercent');->default('0.00';)
//    everything is a whole number except for the last three, search float in documentation
      $table->timestamps();
    });
    }

    public function down()
    {
        Schema::dropIfExists('players');
    }
}
