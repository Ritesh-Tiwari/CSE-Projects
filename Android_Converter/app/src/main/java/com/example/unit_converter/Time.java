package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Time extends AppCompatActivity {
    EditText Houre,Min,Sec,MiliSec,Day;
    double houre,min,sec,milisec,day;

    Button Convert,Cance;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_time);
        Houre=findViewById(R.id.textHoure);
        Min=findViewById(R.id.txt2);
        Sec=findViewById(R.id.txt3);
        MiliSec=findViewById(R.id.txt4);
        Day=findViewById(R.id.txt5);
        Convert=findViewById(R.id.Convert);
        Cance=findViewById(R.id.cance);
        Convert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                houre = Double.parseDouble(Houre.getText().toString());
            min=houre*60;
            sec=houre*60*60;
            milisec=houre*360*1000;
            day=houre/24;
            Min.setText("Minute         :"+String.valueOf(min));
            Sec.setText("Second         :"+String.valueOf(sec));
            MiliSec.setText("MiliSecond     :"+String.valueOf(milisec));
            Day.setText("Day            :"+String.valueOf(day));

            }
        });
        Cance.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                closeContextMenu();
                Intent intent=new Intent(Time.this,MainActivity.class);
                startActivity(intent);
            }
        });

    }
}
