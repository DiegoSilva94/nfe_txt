<?php

namespace NFETxt;

use NFETxt\Exception\ValidRow;
use NFETxt\Rows\A;
use NFETxt\Rows\B;
use NFETxt\Rows\BA;
use NFETxt\Rows\BA\BA02;
use NFETxt\Rows\BA\BA03;
use NFETxt\Rows\BA\BA10;
use NFETxt\Rows\BA\BA13;
use NFETxt\Rows\BA\BA14;
use NFETxt\Rows\BA\BA19;
use NFETxt\Rows\BA\BA20;
use NFETxt\Rows\C;
use NFETxt\Rows\C\C02;
use NFETxt\Rows\C\C02a;
use NFETxt\Rows\C\C05;
use NFETxt\Rows\D;
use NFETxt\Rows\E;
use NFETxt\Rows\E\E02;
use NFETxt\Rows\E\E03;
use NFETxt\Rows\E\E03a;
use NFETxt\Rows\E\E05;
use NFETxt\Rows\F;
use NFETxt\Rows\F\F02;
use NFETxt\Rows\F\F02a;
use NFETxt\Rows\G;
use NFETxt\Rows\G\G02;
use NFETxt\Rows\G\G02a;
use NFETxt\Rows\GA;
use NFETxt\Rows\GA\GA02;
use NFETxt\Rows\GA\GA03;
use NFETxt\Rows\H;
use NFETxt\Rows\I;
use NFETxt\Rows\I\I05a;
use NFETxt\Rows\I\I05c;
use NFETxt\Rows\I\I18;
use NFETxt\Rows\I\I25;
use NFETxt\Rows\I\I50;
use NFETxt\Rows\I\I52;
use NFETxt\Rows\J;
use NFETxt\Rows\K;
use NFETxt\Rows\L;
use NFETxt\Rows\LA;
use NFETxt\Rows\LA\LA07;
use NFETxt\Rows\LB;
use NFETxt\Rows\M;
use NFETxt\Rows\N;
use NFETxt\Rows\N\N02;
use NFETxt\Rows\N\N03;
use NFETxt\Rows\N\N04;
use NFETxt\Rows\N\N05;
use NFETxt\Rows\N\N06;
use NFETxt\Rows\N\N07;
use NFETxt\Rows\N\N08;
use NFETxt\Rows\N\N09;
use NFETxt\Rows\N\N10;
use NFETxt\Rows\N\N10a;
use NFETxt\Rows\N\N10b;
use NFETxt\Rows\N\N10c;
use NFETxt\Rows\N\N10d;
use NFETxt\Rows\N\N10e;
use NFETxt\Rows\N\N10f;
use NFETxt\Rows\N\N10g;
use NFETxt\Rows\N\N10h;
use NFETxt\Rows\NA;
use NFETxt\Rows\O;
use NFETxt\Rows\O\O07;
use NFETxt\Rows\O\O08;
use NFETxt\Rows\O\O10;
use NFETxt\Rows\O\O11;
use NFETxt\Rows\P;
use NFETxt\Rows\Q;
use NFETxt\Rows\Q\Q02;
use NFETxt\Rows\Q\Q03;
use NFETxt\Rows\Q\Q04;
use NFETxt\Rows\Q\Q05;
use NFETxt\Rows\Q\Q07;
use NFETxt\Rows\Q\Q10;
use NFETxt\Rows\R;
use NFETxt\Rows\R\R02;
use NFETxt\Rows\R\R04;
use NFETxt\Rows\S;
use NFETxt\Rows\S\S02;
use NFETxt\Rows\S\S03;
use NFETxt\Rows\S\S04;
use NFETxt\Rows\S\S05;
use NFETxt\Rows\S\S07;
use NFETxt\Rows\S\S09;
use NFETxt\Rows\T;
use NFETxt\Rows\T\T02;
use NFETxt\Rows\T\T04;
use NFETxt\Rows\U;
use NFETxt\Rows\UA;
use NFETxt\Rows\W;
use NFETxt\Rows\W\W02;
use NFETxt\Rows\W\W04c;
use NFETxt\Rows\W\W04e;
use NFETxt\Rows\W\W04g;
use NFETxt\Rows\W\W17;
use NFETxt\Rows\W\W23;
use NFETxt\Rows\X;
use NFETxt\Rows\X\X03;
use NFETxt\Rows\X\X04;
use NFETxt\Rows\X\X05;
use NFETxt\Rows\X\X11;
use NFETxt\Rows\X\X18;
use NFETxt\Rows\X\X22;
use NFETxt\Rows\X\X25a;
use NFETxt\Rows\X\X25b;
use NFETxt\Rows\X\X26;
use NFETxt\Rows\X\X33;
use NFETxt\Rows\Y;
use NFETxt\Rows\Y\Y02;
use NFETxt\Rows\Y\Y07;
use NFETxt\Rows\YA;
use NFETxt\Rows\Z;
use NFETxt\Rows\Z\Z04;
use NFETxt\Rows\Z\Z07;
use NFETxt\Rows\Z\Z10;
use NFETxt\Rows\ZA;
use NFETxt\Rows\ZB;
use NFETxt\Rows\ZC;
use NFETxt\Rows\ZC\ZC04;
use NFETxt\Rows\ZC\ZC10;

class NFe
{
    /**
     * @var array
     */
	private $rows = [];

    /**
     * @return string
     */
    public function __toString()
    {
        if(!$this->is_back_instance([
            X04::class,
            X05::class,
            X11::class,
            X18::class,
            X22::class,
            X26::class,
            X33::class,
            Y::class,
            Y02::class,
            Y07::class,
            YA::class,
            Z::class,
            Z04::class,
            Z07::class,
            Z10::class,
            ZA::class,
            ZB::class,
            ZC::class,
            ZC04::class,
            ZC10::class
        ]))
            return 'Linhas faltando';
        $return = '';
        foreach ($this->rows as $row)
            $return .= "\n" . $row;
        return substr($return, 1);
    }

    /**
     * @param $row
     * @return string
     */
	public function addRow($row)
	{
		try{
			$this->checkRegraCriacao($row);
        } catch (ValidRow $e) {
            $this->rows[] = $row;
            return $e->getMessage();
        } catch (\Exception $e) {
			return $e->getMessage();
		}
	}

	/**
	 *	Checa se as regras da nota fiscal estão sendo seguidas
	 */
	private function checkRegraCriacao($row)
	{
        $this->checkInstace($row, A::class);
        $this->checkInstace($row, B::class, A::class);
        $this->checkInstace($row, BA::class, [
            B::class,
            BA02::class,
            BA03::class,
            BA13::class,
            BA14::class,
            BA19::class,
            BA20::class
        ], 500);
        $this->checkInstace($row, BA02::class, BA::class);
        $this->checkInstace($row, BA03::class, BA::class);
        $this->checkInstace($row, BA10::class, BA::class);
        $this->checkInstace($row, BA13::class, BA10::class);
        $this->checkInstace($row, BA14::class, BA10::class);
        $this->checkInstace($row, BA19::class, BA::class);
        $this->checkInstace($row, BA20::class, BA::class);
        $this->checkInstace($row, C::class, [
            B::class,
            BA02::class,
            BA03::class,
            BA13::class,
            BA14::class,
            BA19::class,
            BA20::class
        ]);
        $this->checkInstace($row, C02::class, C::class);
        $this->checkInstace($row, C02a::class, C::class);
        $this->checkInstace($row, C05::class, [
            C02::class,
            C02a::class
        ]);
        $this->checkInstace($row, D::class, C05::class);
        $this->checkInstace($row, E::class, [
            C05::class,
            D::class
        ]);
        $this->checkInstace($row, E02::class, E::class);
        $this->checkInstace($row, E03::class, E::class);
        $this->checkInstace($row, E03a::class, E::class);
        $this->checkInstace($row, E05::class, [
            E02::class,
            E03::class,
            E03a::class
        ]);
        $this->checkInstace($row, F::class, [
            C05::class,
            D::class,
            E02::class,
            E03::class,
            E03a::class,
            E05::class
        ]);
        $this->checkInstace($row, F02::class, F::class);
        $this->checkInstace($row, F02a::class, F::class);
        $this->checkInstace($row, G::class, [
            C05::class,
            D::class,
            E02::class,
            E03::class,
            E03a::class,
            E05::class,
            F02::class,
            F02a::class
        ]);
        $this->checkInstace($row, G02::class, G::class);
        $this->checkInstace($row, G02a::class, G::class);
        $this->checkInstace($row, GA::class, [
            C05::class,
            D::class,
            E02::class,
            E03::class,
            E03a::class,
            E05::class,
            F02::class,
            F02a::class,
            G02::class,
            G02a::class
        ]);
        $this->checkInstace($row, GA02::class, GA::class);
        $this->checkInstace($row, GA03::class, GA::class);
        $this->checkInstace($row, H::class, [
            C05::class,
            D::class,
            E02::class,
            E03::class,
            E03a::class,
            E05::class,
            F02::class,
            F02a::class,
            G02::class,
            G02a::class,
            GA02::class,
            GA03::class,
            J::class,
            K::class,
            L::class,
            LA::class,
            LA07::class,
            LB::class
        ], 990);
        $this->checkInstace($row, I::class, H::class);
        $this->checkInstace($row, I05a::class, [
            I::class,
            I05a::class
        ], 8);
        $this->checkInstace($row, I05c::class, [
            I::class,
            I05a::class
        ]);
        $this->checkInstace($row, I18::class, [
            I05a::class,
            I05c::class,
            I25::class
        ], 100);
        $this->checkInstace($row, I25::class, [
            I18::class,
            I25::class
        ], 100);
        $this->checkInstace($row, I50::class, [
            I25::class,
            I50::class,
            I52::class
        ], 500);
        $this->checkInstace($row, I52::class, I50::class);
        $this->checkInstace($row, J::class, [
            I05a::class,
            I05c::class,
            I25::class,
            I50::class,
            I52::class
        ]);
        $this->checkInstace($row, K::class, [
            I05a::class,
            I05c::class,
            I25::class,
            I50::class,
            I52::class,
            K::class
        ], 500);
        $this->checkInstace($row, L::class, [
            I05a::class,
            I05c::class,
            I25::class,
            I50::class,
            I52::class,
            L::class
        ], 500);
        $this->checkInstace($row, LA::class, [
            I05a::class,
            I05c::class,
            I25::class,
            I50::class,
            I52::class,
        ]);
        $this->checkInstace($row, LA07::class, LA::class);
        $this->checkInstace($row, LB::class, [
            I05a::class,
            I05c::class,
            I25::class,
            I50::class,
            I52::class,
        ]);
        $this->checkInstace($row, M::class, [
            J::class,
            K::class,
            L::class,
            LA::class,
            LA07::class,
            LB::class
        ]);
        $this->checkInstace($row, N::class, M::class);
        $this->checkInstace($row, N02::class, N::class);
        $this->checkInstace($row, N03::class, N::class);
        $this->checkInstace($row, N04::class, N::class);
        $this->checkInstace($row, N05::class, N::class);
        $this->checkInstace($row, N06::class, N::class);
        $this->checkInstace($row, N07::class, N::class);
        $this->checkInstace($row, N08::class, N::class);
        $this->checkInstace($row, N09::class, N::class);
        $this->checkInstace($row, N10::class, N::class);
        $this->checkInstace($row, N10a::class, N::class);
        $this->checkInstace($row, N10b::class, N::class);
        $this->checkInstace($row, N10c::class, N::class);
        $this->checkInstace($row, N10d::class, N::class);
        $this->checkInstace($row, N10e::class, N::class);
        $this->checkInstace($row, N10f::class, N::class);
        $this->checkInstace($row, N10g::class, N::class);
        $this->checkInstace($row, N10h::class, N::class);
        $this->checkInstace($row, O::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class
        ]);
        $this->checkInstace($row, O07::class, O::class);
        $this->checkInstace($row, O10::class, O07::class);
        $this->checkInstace($row, O11::class, O07::class);
        $this->checkInstace($row, O08::class, O::class);
        $this->checkInstace($row, P::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class
        ]);
        $this->checkInstace($row, Q::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class
        ]);
        $this->checkInstace($row, Q02::class, Q::class);
        $this->checkInstace($row, Q03::class, Q::class);
        $this->checkInstace($row, Q04::class, Q::class);
        $this->checkInstace($row, Q05::class, Q::class);
        $this->checkInstace($row, Q07::class, Q05::class);
        $this->checkInstace($row, Q10::class, Q05::class);
        $this->checkInstace($row, R::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class
        ]);
        $this->checkInstace($row, R02::class, R::class);
        $this->checkInstace($row, R04::class, R::class);
        $this->checkInstace($row, S::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class,
            R02::class,
            R04::class
        ]);
        $this->checkInstace($row, S02::class, S::class);
        $this->checkInstace($row, S03::class, S::class);
        $this->checkInstace($row, S04::class, S::class);
        $this->checkInstace($row, S05::class, S::class);
        $this->checkInstace($row, S07::class, S05::class);
        $this->checkInstace($row, S09::class, S05::class);
        $this->checkInstace($row, T::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class,
            R02::class,
            R04::class,
            S02::class,
            S03::class,
            S04::class,
            S07::class,
            S09::class
        ]);
        $this->checkInstace($row, T02::class, T::class);
        $this->checkInstace($row, T04::class, T::class);
        $this->checkInstace($row, NA::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class,
            R02::class,
            R04::class,
            S07::class,
            S09::class,
            T02::class,
            T04::class
        ]);
        $this->checkInstace($row, U::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class,
            R02::class,
            R04::class,
            S07::class,
            S09::class,
            T02::class,
            T04::class,
            NA::class
        ]);
        $this->checkInstace($row, UA::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class,
            R02::class,
            R04::class,
            S07::class,
            S09::class,
            T02::class,
            T04::class,
            NA::class,
            U::class
        ]);
        $this->checkInstace($row, W::class, [
            N02::class,
            N03::class,
            N04::class,
            N05::class,
            N06::class,
            N07::class,
            N08::class,
            N09::class,
            N10::class,
            N10a::class,
            N10b::class,
            N10c::class,
            N10d::class,
            N10e::class,
            N10f::class,
            N10g::class,
            N10h::class,
            O08::class,
            O10::class,
            O11::class,
            P::class,
            Q02::class,
            Q03::class,
            Q04::class,
            Q05::class,
            Q07::class,
            Q10::class,
            R02::class,
            R04::class,
            S07::class,
            S09::class,
            T02::class,
            T04::class,
            NA::class,
            U::class,
            UA::class
        ]);
        $this->checkInstace($row, W02::class, W::class);
        $this->checkInstace($row, W04c::class, W02::class);
        $this->checkInstace($row, W04e::class, [
            W02::class,
            W04c::class
        ]);
        $this->checkInstace($row, W04g::class, [
            W02::class,
            W04c::class,
            W04e::class
        ]);
        $this->checkInstace($row, W17::class, [
            W02::class,
            W04c::class,
            W04e::class,
            W04g::class
        ]);
        $this->checkInstace($row, W23::class, [
            W02::class,
            W04c::class,
            W04e::class,
            W04g::class,
            W17::class
        ]);
        $this->checkInstace($row, X::class, [
            W02::class,
            W04c::class,
            W04e::class,
            W04g::class,
            W17::class,
            W23::class
        ]);
        $this->checkInstace($row, X03::class, X::class);
        $this->checkInstace($row, X04::class, X03::class);
        $this->checkInstace($row, X05::class, X03::class);
        $this->checkInstace($row, X11::class, [
            X::class,
            X04::class,
            X05::class
        ]);
        $this->checkInstace($row, X18::class, [
            X::class,
            X04::class,
            X05::class,
            X11::class
        ]);
        $this->checkInstace($row, X22::class, [
            X18::class
        ], 5);
        $this->checkInstace($row, X25a::class, [
            X::class,
            X04::class,
            X05::class,
            X11::class
        ]);
        $this->checkInstace($row, X25b::class, [
            X::class,
            X04::class,
            X05::class,
            X11::class
        ]);
        $this->checkInstace($row, X26::class, [
            X18::class,
            X22::class,
            X25a::class,
            X25b::class,
            X26::class,
            X33::class
        ], 5000);
        $this->checkInstace($row, X33::class, [
            X26::class,
            X33::class
        ], 5000);
        $this->checkInstace($row, Y::class, [
            X18::class,
            X22::class,
            X25a::class,
            X25b::class,
            X26::class,
            X33::class
        ]);
        $this->checkInstace($row, Y02::class, Y::class);
        $this->checkInstace($row, Y07::class, [
            Y::class,
            Y02::class,
            Y07::class
        ], 120);
        $this->checkInstace($row, YA::class, [
            Y::class,
            Y02::class,
            Y07::class,
            YA::class
        ], 100);
        $this->checkInstace($row, Z::class, [
            X18::class,
            X22::class,
            X25a::class,
            X25b::class,
            X26::class,
            X33::class,
            Y::class,
            Y02::class,
            Y07::class,
            YA::class
        ]);
        $this->checkInstace($row, Z04::class, [
            Z::class,
            Z04::class
        ], 10);
        $this->checkInstace($row, Z07::class, [
            Z::class,
            Z04::class,
            Z07::class
        ], 10);
        $this->checkInstace($row, Z10::class, [
            Z::class,
            Z04::class,
            Z07::class,
            Z10::class
        ], 100);
        $this->checkInstace($row, ZA::class, [
            X18::class,
            X22::class,
            X25a::class,
            X25b::class,
            X26::class,
            X33::class,
            Y::class,
            Y02::class,
            Y07::class,
            YA::class,
            Z::class,
            Z04::class,
            Z07::class,
            Z10::class
        ]);
        $this->checkInstace($row, ZB::class, [
            X18::class,
            X22::class,
            X25a::class,
            X25b::class,
            X26::class,
            X33::class,
            Y::class,
            Y02::class,
            Y07::class,
            YA::class,
            Z::class,
            Z04::class,
            Z07::class,
            Z10::class,
            ZA::class
        ]);
        $this->checkInstace($row, ZC::class, [
            X18::class,
            X22::class,
            X25a::class,
            X25b::class,
            X26::class,
            X33::class,
            Y::class,
            Y02::class,
            Y07::class,
            YA::class,
            Z::class,
            Z04::class,
            Z07::class,
            Z10::class,
            ZA::class,
            ZB::class
        ]);
        $this->checkInstace($row, ZC04::class, [
            ZC::class,
            ZC04::class
        ], 31);
        $this->checkInstace($row, ZC10::class, [
            ZC04::class,
            ZC10::class
        ], 10);
	}

    /**
     * @param $row
     * @param null $instance
     * @param null $backInstance
     * @throws \Exception
     * @throws ValidRow
     */
    private function checkInstace($row, $instance, $backInstance = null, $limit = null)
	{
        /**
         * Checa se a ultima instancia é uma definida ou um grupo de instancias definidas
         * Não permitindo que ela seja instanciada se não for
         */
		if($backInstance != null && $row instanceof $instance && !$this->is_back_instance($backInstance))
            throw new \Exception(get_class($row) . ' possui pendencias');
        /**
         * Checa se não possui instancias
         * Não permitindo que ela seja instanciada se possui
         */
        if($backInstance == null && $row instanceof $instance && count($this->rows) > 0)
            throw new \Exception(get_class($row) . ' não pode ser instanciada');
        /**
         * Checa se o limite está sendo respeitado
         * Não permitindo que ela seja instanciada se o limite for estourar
         */
        if($limit != null && $row instanceof $instance && $this->length($instance) == $limit)
            throw new \Exception(get_class($row) . ' chegou do limite estabelecido');
        /**
         * Depois de todas as validações
         * Não permitindo que ela seja instanciada se não for a instancia
         */
        if($row instanceof $instance)
            throw new ValidRow(get_class($row) . ' pode ser aplicada');
    }

    /**
     * @param $instance
     * @return bool
     */
    private function is_back_instance($instance)
    {
        if(!is_array($instance))
            $instance = [$instance];
        foreach ($instance as $i)
            if(end($this->rows) instanceof $i)
                return true;
        return false;
    }

    /**
     * @param $instance
     * @return int
     */
    private function length($instance)
    {
        $count = 0;
        foreach ($this->rows as $row)
            if($row instanceof $instance)
                $count++;
        return $count;
    }
}