package com.example.unit_converter;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class Mass extends AppCompatActivity {
    EditText KG,G,MG,T,MT;
    double kg,g,mg,t,mt;
    Button Convert,Cance;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mass);
        KG=findViewById(R.id.txtKG);
        G=findViewById(R.id.txtG);
        MG=findViewById(R.id.txtmg);
        T=findViewById(R.id.txtT);
        MT=findViewById(R.id.txtMT);
        Convert=findViewById(R.id.convert3);
        Cance=findViewById(R.id.cance4);
        Convert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                kg = Double.parseDouble(KG.getText().toString());
                g=kg*1000;
                mg=kg*1000*1000;
                t=kg/1000;
                mt=kg/1000*1000;
                G.setText("Gram            :"+String.valueOf(g));
                MG.setText("MiliGram       :"+String.valueOf(mg));
                T.setText("Tonne           :"+String.valueOf(t));
                MT.setText("MegaTonne      :"+String.valueOf(mt));
            }
        });
        Cance.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                closeContextMenu();
                Intent intent=new Intent(Mass.this,MainActivity.class);
                startActivity(intent);
            }
        });
    }
}
