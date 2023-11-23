package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Speed extends AppCompatActivity {
    EditText MPH,FPS,MPS,KPS;
    double mph,fps,mps,kps;

    Button Convert,Cance;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_speed);
        MPH=findViewById(R.id.text1);
        FPS=findViewById(R.id.txt2);
        MPS=findViewById(R.id.txt3);
        KPS=findViewById(R.id.txt4);
        Convert=findViewById(R.id.Convert);
        Cance=findViewById(R.id.cance);
        Convert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                mph = Double.parseDouble(MPH.getText().toString());
                fps=mph*1.467;
                mps=mph/2.237;
                kps=mph*1.609;

                FPS.setText("Foot per Secound           :"+String.valueOf(fps));
                MPS.setText("Meter per Secound          :"+String.valueOf(mps));
                KPS.setText("KiloMeter per Second       :"+String.valueOf(kps));

            }
        });
        Cance.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                closeContextMenu();
                Intent intent=new Intent(Speed.this,MainActivity.class);
                startActivity(intent);
            }
        });
    }
}
