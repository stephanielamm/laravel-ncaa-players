
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
      $table->string('first');
      $table->string('last');
      $table->integer('gamesPlayed');
      $table->integer('avgMinutes');
      $table->integer('ppg');
      $table->integer('rpg');
      $table->integer('apg');
      $table->integer('spg');
      $table->integer('bpg');
      $table->integer('tpg');
      $table->integer('fgPercent');
      $table->integer('ftPercent');
      $table->integer('tpPercent');
//    everything is a whole number except for the last three, search float in documentation
      $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
