$table->id();
            $table->string('series_Refreance');
            $table->string('period');
            $table->string('data_Value');
            $table->string('status');
            $table->string('units');
            $table->string('magntude');
            $table->string('subject');
            $table->string('group');
            $table->string('series_title_1');
            $table->string('series_title_2');
            $table->string('series_title_3');
            $table->string('series_title_4');
            $table->string('series_title_5');
            $table->timestamps();   
        });


        <!-- model  -->

        protected $fillable = [
        'series_Refreance','period','data_Value','status','units','magntude','subject','group','series_title_1','series_title_2','series_title_3','series_title_4','series_title_5'
    ];

    <!-- controller  -->

    public function definition()
    {
        return [
            'series_Refreance'=> $this->faker->series_Refreance(),
            'period' => $this->faker->period(),
            'data_Value'=> $this->faker->data_Value(),
            'status'=> $this->faker->status,
            'units'=> $this->faker->units(),
            'magntude'=> $this->faker->magntude(),
            'subject'=> $this->faker->subject(),
            'group'=> $this->faker->group(),
            'series_title_1'=> $this->faker->series_title_1(),
            'series_title_2'=> $this->faker->series_title_2(),
            'series_title_3'=> $this->faker->series_title_3(),
            'series_title_4'=> $this->faker->series_title_4(),
            'series_title_5'=> $this->faker->series_title_5(),
        ];
    }


    <!-- userimport  -->

    return new User([
            'Series_refreance' =>  $row[0],
            'Period' => $row[1],
            'Data_value' => $row[2],
            'STATUS' => $row[3],
            'UNITS' => $row[4],
            'MAGNTUDE' => $row[5],
            'Subject' => $row[6],
            'Group' => $row[7],
            'Series_title_1' => $row[8],
            'Series_title_2' => $row[9],
            'Series_title_3' => $row[10],
            'Series_title_4' => $row[11],
            'Series_title_5' => Hash::make($row[12])
        ]);